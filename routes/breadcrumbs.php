<?php

// Home
Breadcrumbs::for('course', function ($trail, $id) {
    $trail->push('Return to Course', route('course.show', $id));
});
