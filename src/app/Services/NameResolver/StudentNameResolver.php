<?php
namespace Services\NameResolver;

class StudentNameResolver implements NameResolverInterface {

    public function resolve($users) {

        foreach ($users as $index => $user) {

            $firstNames[] = $user->firstName;
            $lastNames[] = $user->lastName;

            $user->displayName = $user->firstName;

        }

        $ref = 0;
        foreach ($firstNames as $current) {
            $ref++;
            $count = array_count_values($firstNames);
            if (  $count[$current] > 1 )  {
                echo $current . ", " . $lastNames[$ref] . "<br>";
            } else {
                echo $current . "<br>";
            }
        }

        var_dump($firstNames);
    }

}