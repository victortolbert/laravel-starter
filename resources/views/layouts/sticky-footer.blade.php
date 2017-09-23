<html>
<head>
    <style>
        html{
            height: 100%;
        }

        body{
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .main{
           /* The main section will take up all the available free space
              on the page that is not taken up by the footer. */
           flex: 1 0 auto;
        }

        footer{
           /* The footer will take up as much vertical space as it needs and not a pixel more. */
           flex: 0 0 auto;
        }
    </style>
</head>
<body>
    <div class="main">

    </div>
    <footer>

    </footer>
</body>
</html>
