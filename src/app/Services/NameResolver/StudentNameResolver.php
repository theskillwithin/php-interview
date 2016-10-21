<?php
namespace Services\NameResolver;

abstract class StudentNameResolver implements NameResolverInterface {

    public function resolve($users) {
        var_dump($users);
    }

}