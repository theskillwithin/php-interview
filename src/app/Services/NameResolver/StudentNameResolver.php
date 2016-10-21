<?php
namespace Services\NameResolver;

class StudentNameResolver implements NameResolverInterface {

    public function resolve($users) {
        foreach ($users as $index => $user) {
            echo $user->firstName;
        }
        var_dump($users);
    }

}