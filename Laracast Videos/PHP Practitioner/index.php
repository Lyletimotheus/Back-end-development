<?php 
    require 'functions.php';

    // $names = ['Jeff', 'Lyle', 'Carlos'];
    $animals = ['Cat', 'Bat', 'Snake', 'Rat','Dog'];

    // $person = [
    //     'name' => 'Lyle Timotheus',
    //     'age' => 27,
    //     'hair color' => 'black',
    //     'career' => 'web developer'
    // ];
    // Pushing a new item to the array
    // $person['soccer team'] = 'Arsenal' ;

    // Removing a item from the array
    // unset($person['age']);

    // $task = [
    //     'title' => 'Maths homework',
    //     'due' => '1 December 2021',
    //     'assigned_to' => 'Lyle Timotheus',
    //     'completed' => false,
    //     'billable' => false 
    // ];

    // if($task['completed'] === true) {
    //     echo "Task completed";
    // }else{
    //     echo "Task NOT completed.";
    // }

    // Calling the above pre function 
    // dd($task);

    // dd($animals);

    // Calling the age function to determine age 
    echo age(3);

    require 'index.view.php';
   

