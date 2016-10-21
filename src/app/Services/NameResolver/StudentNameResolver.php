<?php
namespace Services\NameResolver;

class StudentNameResolver implements NameResolverInterface {

    public function resolve($users) {

//        if(count(array_unique($users->firstName))<count($users->firstName))
//        {
//            echo "duplicate";
//        }
//        else {
//            echo "not duplicate";
//        }


        foreach ($users as $index => $user) {
//            echo $user->firstName;
//            echo $user->lastName;


            $firstNames[] = $user->firstName;


            $user->displayName = $user->firstName;
            echo $user->displayName;
            echo "<br>";
        }


        for ($current = 0; $current < count($firstNames);$current++) {
            if (in_array($firstNames[$current],$firstNames)) {
                echo "duplicate";
            } else {
                echo "NONduplicate";
            }
        }

        var_dump($firstNames);
    }

}