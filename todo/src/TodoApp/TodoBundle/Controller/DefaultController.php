<?php

namespace TodoApp\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use TodoApp\TodoBundle\Entity\Category;
use TodoApp\TodoBundle\Entity\Task;


class DefaultController extends Controller
{
    /**
     * @param string $message
     */
    private function notify($message)
    {
        $session = new Session();
        $session->start();
        $session->getFlashBag()->add('notification', $message);
    }

    /**
     * @param string $title
     * @return Category
     */
    private function newCategory($title)
    {
        $category = new Category();
        $category->setTitle($title);

        if (!$category) {
            throw $this->createNotFoundException('Can not create category.');
        }

        return $category;
    }

    private function newTask($title, $category, $dueDate)
    {
        $task = new Task();
        $task->setTitle($title);
        $task->setCategory($category);
        $task->setDueDate(date("l (j F)", strtotime($dueDate)));

        return $task;
    }
    /**
     * @param string $repository
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    private function getRepository($repository)
    {
        $data = $this->getDoctrine()->getRepository($repository);

        if (!$data) {
            throw $this->createNotFoundException('No such repository.');
        }

        return $data;
    }


    /*
     * Actions
     */


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $categories = $this->getRepository('TodoBundle:Category')->findAll();
        $tasks      = $this->getRepository('TodoBundle:Task')    ->findAll();

        return $this->render('@Todo/Default/index.html.twig', array(
            'categories'     => $categories,
            'tasks'          => $tasks,
            'category_title' => 'All tasks'
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addCategoryAction(Request $request)
    {
        $title = $request->request->get('category_title');

        $category = $this->newCategory($title);

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();

        $this->notify("Created category '".$category->getTitle()."'");

        return $this->forward('TodoBundle:Default:index');
    }

    /**
     * @param string $category_url
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteCategoryAction($category_url)
    {
        $category = $this->getRepository('TodoBundle:Category')->findOneByUrl($category_url);

        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();

        $this->notify('Removed category "'.$category->getTitle().'"');

        return $this->redirect($this->generateUrl('show_all'));
    }

    /**
     * @param string $category_url
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexTaskAction($category_url)
    {
        $categories = $this->getRepository('TodoBundle:Category')->findAll();
        $category   = $this->getRepository('TodoBundle:Category')->findOneByUrl($category_url);
        $tasks      = $this->getRepository('TodoBundle:Task')    ->findByCategory($category);

        return $this->render('@Todo/Default/index.html.twig', array(
            'categories'     => $categories,
            'tasks'          => $tasks,
            'category_url'   => $category_url,
            'category_title' => $category->getTitle()
        ));
    }

    /**
     * @param string $category_url
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addTaskAction($category_url, Request $request)
    {
        $title   = $request->request->get('task_title');
        $dueDate = $request->request->get('task_date');

        if (!isset($dueDate)) {
            $dueDate = null;
        }

        $em = $this->getDoctrine()->getEntityManager();

        $category       = $em->getRepository('TodoBundle:Category')->findOneByUrl($category_url);
        $categoryTitle  = $category->getTitle();

        $task = $this->newTask($title, $category, $dueDate);

        $em->persist($task);
        $em->flush();

        $this->notify('New task created in "'.$categoryTitle.'"');

        return $this->forward('TodoBundle:Default:indexTask', array(
            'category_url' => $category_url
        ));
    }

    /**
     * @param string $category_url
     * @param $task_id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteTaskAction($category_url, $task_id)
    {
        $category   = $this->getRepository('TodoBundle:Category')->findOneByUrl($category_url);
        $task       = $this->getRepository('TodoBundle:Task')    ->findOneById($task_id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($task);
        $em->flush();

        $this->notify('Completed task!');

        return $this->redirect($this->generateUrl('show_category', array(
            'category_url' => $category_url
        )));
    }
}
