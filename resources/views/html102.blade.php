@extends('template.defaultPage')

@section('content')
    <h1>workshop # html102</h1>
    <input type="text" id="myinput" value="inputtextvalue" />
    <button onclick="myfunc1()" on>func 1</button>
    <button onclick="myfunc2()" on>func 2</button>
    <button onclick="myfunc3()" on>func 3</button>
@endsection

@push('scripts')
    <h1>this is script1</h1>
@endpush

@push('scripts')
    <h1>this is script2</h1>
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