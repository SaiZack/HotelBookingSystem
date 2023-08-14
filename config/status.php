<?php

return [
   "status_id" => [
        "pending" => 0,
        "booked" => 1,
        "checkedIn" => 2,
        "completed" => 3,
   ],
   "status_label" => [
        0 => "Pending",
        1 => "Booked",
        2 => "Checked In",
        3 => "Completed",
   ],
   "status_color" => [
        0 => "bg-rose-300",
        1 => "bg-sky-300",
        2 => "bg-teal-300",
        3 => "bg-amber-300",
    ],
    "status_icon" => [
        0 => "spinner",
        1 => "bookmark",
        2 => "calendar-check",
        3 => "circle-check",
    ]
];
