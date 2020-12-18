<?php
namespace Slothsoft\Devtools\Unity;

require_once __DIR__ . '/../vendor/autoload.php';

$course = new UnityCourse('repositories.xml', 'results');

foreach ($course->getGitProjects(true) as $git) {
    $git->pull();
    $git->reset();
}