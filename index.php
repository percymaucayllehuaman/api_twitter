

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body class="m-0 p-0 bg-[#dfdfdf]">
    <div class=" flex justify-center">
        <div class="min-w-[500px] max-w-[800px] bg-white overflow-auto">
            <form action="post.php" class="px-5 py-4 w-auto" method="post">
                <div class="pt-5 pb-2 font-bold text-blue-500">
                    <h2>API TWITTER</h2>
                </div>
                <div class="py-4">
                    <textarea name="text_area" id="" cols="40" rows="5" class="rounded-lg focus:outline-none border-blue-500 text-[#5a5a5a] px-1 py-2"></textarea>
                </div>
                <!-- rgb(29, 155, 240) -->
                <button type="submit" class="bg-blue-500 text-white px-8 py-1 rounded-full hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                    Tweet
                </button>
            </form>
        </div>

    </div>

</body>

</html>