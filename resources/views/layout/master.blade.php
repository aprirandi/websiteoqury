<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container mx-auto px-5 bg-gray-100 dark:bg-gray-800 ">
    @yield('content')

    <script>
    const html=document.querySelector('html')
        const btnToggle=document.querySelector('.toggle')   
      
        let status=false //toggle the dark mode
        btnToggle.addEventListener('click',()=>{
            if (!status) {
                html.classList.add('dark')
                status=!status
            }else{
                html.classList.remove('dark')
                status=!status
            }
        })
    </script>
</body>
</html>