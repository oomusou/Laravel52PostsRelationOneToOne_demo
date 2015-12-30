<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    /** @var UserRepository */
    private $userRepository;


    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getUserPost();

        return view('users.index', compact('users'));
    }
}
