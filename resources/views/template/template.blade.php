<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Receitas/Despesas</title>
    <link rel="stylesheet" href="{{{ url('assets/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}}">
</head>
<body>

    @yield('content')

    <script> 
            (function(win,doc){
                'use strict';

                //Delete
                function confirmDel(event)
                {
                    event.preventDefault();
                    //console.log(event.target.parentNode.href);
                    let token=doc.getElementsByName("_token")[0].value;
                    if(confirm("Deseja mesmo apagar?")){
                    let ajax=new XMLHttpRequest();
                    ajax.open("DELETE",event.target.parentNode.href);
                    ajax.setRequestHeader('X-CSRF-TOKEN',token);
                    ajax.onreadystatechange=function(){
                        if(ajax.readyState === 4 && ajax.status === 200){
                            win.location.href="index";
                        }
                    };
                    ajax.send();
                    }else{
                        return false;
                    }
                }
                if(doc.querySelector('.js-del')){
                    let btn=doc.querySelectorAll('.js-del');
                    for(let i=0; i < btn.length; i++){
                        btn[i].addEventListener('click',confirmDel,false);
                    }
                }
            })(window,document);
    </script>
</body>
</html>
