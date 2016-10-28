<?php
namespace Services\NameResolver;

class StudentNameResolver implements NameResolverInterface {

    public function resolve($users) {

        foreach ($users as $index => $user) {

            $firstNames[] = $user->firstName;
            $lastNames[] = $user->lastName;

        }

        $ref = 0;
        $count = array_count_values($firstNames);
        foreach ($firstNames as $current) {
            if (  $count[$current] > 1 )  {
                $users{$ref}->displayName = $current . " " . substr($lastNames[$ref],0,1);
            } else {
                $users{$ref}->displayName = $current;
            }
            $ref++;
        }

    }

}