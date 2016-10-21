<?php

namespace Controllers\Web;

use \Services\Repository\RepositoryInterface;
use \Services\NameResolver\StudentNameResolver;

class StudentsController extends \Controllers\Web\WebController {

	protected $studentRepository;
    protected $studentNameResolver;

	public function __construct($container) {
		parent::__construct($container);
		$this->studentRepository = $this->container['student_repository'];
        $this->studentNameResolver = $this->container['student_name_resolver'];
	}

	public function list($request, $response, $args) {
		$students = $this->studentRepository->getAll();

        $this->studentNameResolver->resolve($students);

		$response = $this->view->render($response, 'students.html', ['students' => $students]);
		return $response;
	}
}
