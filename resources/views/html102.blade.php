@extends('template.defaultPage')
@section('title', 'HTML102')
@section('header',"test JS")

@section('content')
    <?php 
        $myphp = "this is php var";
    ?>
    <h1>workshop # html102</h1>
    <?php echo "Hello World form php"; ?>

    <?php 
        echo $myphp;
        $myArr = [1,2,3,4,5];
        var_dump($myArr);
        echo "<br>";
        print_r($myArr);
        $myArr2["a"] = 1;
        $myArr2[] = 2;
        $myArr2[] = 3;
        $myArr2[] = [1,2,[3,4]];
        echo "<br>";
        print_r($myArr2);
        echo "<br>";

        foreach($myArr as $item){
            echo "item = " . $item . "<br>";
        }
        echo "<br>";
        foreach($myArr as $index => $value){
            echo "myArr[$index] = " . $value . "<br>";
        }
        echo "<br>";
        for($i=0; $i<count($myArr); $i++){
            echo "myArr[$i] = " . $myArr[$i] . "<br>";
        }
        echo "<br>";
        for($i =0; $i < sizeof($myArr); $i++){
            echo "myArr[$i] = " . $myArr[$i] . "<br>";
        }

        
    ?>
    {{-- <input type="text" id="myinput" value="inputtextvalue" />
    <button onclick="myfunc1()" on>func 1</button>
    <button onclick="myfunc2()" on>func 2</button>
    <button onclick="myfunc3()" on>func 3</button> --}}
@endsection

@push('scripts')
    {{-- <h1>this is script1</h1> --}}
@endpush

@push('scripts')
    {{-- <h1>this is script2</h1> --}}
@endpush

@push('scripts')
    {{--
    <script>
        console.log('this is error log');
        alert('this is script3'
    </script> --}}

    <scrip>
        {{-- alert('this is script3');
        console.log('this is log for script3'); --}}

        {{-- myvar = 1;
        console.log('myvar = ' + myvar);
        let myvar2 = "myvar2"
        console.log('myvar2 = ' + myvar2); --}}
        </script>

        <script>
                function myfunc1() {
                    console.log('myfunc called');
                }

                let myfunc2 = function () {
                console.log('myfunc2 called');
            }

                myfunc3 = () => {
                    console.log('myfunc3 called');
                }

                function myfunc4(callback) {
                console.log('myfunc4 called');
                callback();
            }

            myfunc4(myfunc3);

            console.log(document.getElementById('myinput').value);
        </script>
@endpush