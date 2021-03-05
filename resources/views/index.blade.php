<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container mx-auto px-5 bg-gray-100 dark:bg-gray-800 ">
    <div class="flex flex-col mx-auto w-1/2 mt-32">
        <h1 class="text-3xl font-bold text-center mb-2 dark:text-white">Landing Page Oqury Coba-coba</h1>
        <button class="px-2 py-2 bg-gray-200 font-semibold mb-4 toggle dark:bg-gray-900 dark:text-gray-200">Toggle Mode Dark/Light</button>
        <div class="px-5 py-3 rounded-xl shadow-lg bg-gray-200 font-semibold dark:bg-gray-900 dark:text-gray-200">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae suscipit laboriosam ea repudiandae voluptatibus doloribus consequatur ullam ad tempora asperiores, nihil voluptate aliquid? Inventore, vel eum quod provident distinctio alias recusandae, expedita a adipisci atque doloremque est iusto obcaecati quo commodi? Obcaecati debitis odit aliquid, natus laudantium voluptatibus eligendi eius aut quo asperiores vel animi. Vel, aut facilis? Eos molestiae magni aut corporis neque quaerat, harum odit consectetur numquam! Quae hic temporibus sunt dicta, quam officia aliquam dignissimos vitae! Ipsam reiciendis, ea amet itaque, reprehenderit fuga commodi id omnis incidunt tempore pariatur soluta ad placeat, aliquid nemo explicabo! Sequi, magnam vitae eum, sapiente, nisi ullam voluptatem eveniet rerum numquam sint asperiores natus consequatur totam accusamus maiores excepturi enim eius magni repellendus veritatis? Beatae quam reiciendis, labore deleniti accusamus laborum dolor placeat maxime ab quia optio dolore ullam repudiandae praesentium fugiat temporibus vitae, ducimus sint tempora sapiente consectetur fugit nostrum, architecto unde! Similique vel nulla optio ducimus inventore voluptas velit, veritatis, culpa rem adipisci recusandae voluptatibus incidunt labore. Minima ducimus quaerat suscipit voluptatem laboriosam, doloribus recusandae numquam accusamus enim repellendus molestiae temporibus cumque earum dolore officia! Deserunt ipsam nam, molestiae provident animi, expedita quibusdam odit vitae eligendi totam eveniet dignissimos velit!
        </div>
    </div>


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