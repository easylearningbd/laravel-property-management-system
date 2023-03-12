<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function AgentDashboard(){

        return view('agent.agent_dashboard');

    } // End Method 


    public function AgentLogin(){

        return view('agent.agent_login');

    } // End Method 













}
  