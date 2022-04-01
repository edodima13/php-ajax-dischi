<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.31/vue.cjs.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js">
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div id="app">
        <div class="header-top">
        </div>
        <div class="header-main">
            <img src="img/logo-small.svg" alt="">
        </div>
        <main>
            <section>
                <div class="container" >
                    <div v-for="(album, index) in albums" :key="index" class="card">
                        <div>
                            <img :src="album.poster" alt="">
                        </div>
                        <div class="descriptions">
                            <p class="title">titolo</p>
                            <p>author</p>
                            <p>year</p>
                        </div>        
                    </div>
                </div>
            </section>
        </main>
    </div>
      
</body>
</html>