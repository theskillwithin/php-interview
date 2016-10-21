<?php
namespace Services\NameResolver;

class StudentNameResolver implements NameResolverInterface {

    public function resolve($users) {
        foreach ($users as $user) {
            echo $user . "\n";
            echo "test";
        }
    }

}