<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use PDO;

class CollectionController extends Controller
{
    //
    function index()
    {
        //$collection=collect([1,2,3,4,5,6]);

        //$data=$collection->chunk(2);

        // $data=$collection->avg();


        /*macro function
        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
                return Str::upper($value);
            });
        });
         
        $collection = collect(['tejas', 'shivang']);
         
        $upper = $collection->toUpper();
        return $upper;*/

        //Collapse
        /* $collection=collect([
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ]);
        $collapsed= $collection->collapse();
        return $collapsed->all();*/

        //Combine
        // $collection=collect(['name','age']);
        // $combined=$collection->combine(['alex','20']);
        // return $combined->all();

        //cross join
        // $collection=collect(['1','2']);
        // $cross=$collection->crossJoin(['a','b']);
        // return $cross->all();

        //duplicates
        // $collection=collect(['1','2','1','3','2']);
        // $dup=$collection->duplicates();
        // return $dup->all();

        //filter Method
        // $collection=collect(['3','5','2','9']);
        // $filtered=$collection->filter(function($value,$key){
        //     return $value>4;
        // });
        // return $filtered->all();

        //Forget method
        // $collection = collect(['name' => 'elice', 'framework' => 'laravel']);
        // $collection->forget('name');
        // return $collection->all();

        //has Method
        // $collection = collect(['account_id' => 1, 'product' => 'Desk', 'amount' => 5]);
        // return $collection->has('product');


        //Implode method
        // $collection = collect([
        //     ['account_id' => 1, 'product'=>'desk'],
        // ['account_id' => 2, 'product'=>'leptop']
        // ]);
        // return $collection->implode('product',',');

        //join method
        //return collect(['a','b','c'])->join(', ',',and ');      


        //map() method
        // $collection=collect(['1','2','3','4','5']);
        // $multi=$collection->map(function($value,$key){
        //        return $value*2;
        // });
        // return $multi;

        //Map to Group
        $collection = collect([
            [
                'name' => 'shivang',
                'department' => 'Sales',
            ],
            [
                'name' => 'tejas',
                'department' => 'Sales',
            ],
            [
                'name' => 'Jay',
                'department' => 'Marketing',
            ]
        ]);
         
        $grouped = $collection->mapToGroups(function ($item, $key) {
            return [$item['department'] => $item['name']];
        });
        return $grouped->all();
         


    }
}
