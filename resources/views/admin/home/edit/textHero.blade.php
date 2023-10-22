<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit text hero</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

</head>
<body class="flex items-center justify-center h-screen" style="font-family: 'Montserrat', sans-serif;">
    <form method="POST" action="{{ url()->current() }}" class="lg:w-[40rem] xl:w-[50rem] sm:w-[30rem] w-[20rem]">
        @csrf
        <h1 class="font-semibold text-3xl mb-5">Edit text hero</h1>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
              Title
            </label>
          <input name="title" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Text input">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Description
              </label>
            <textarea name="text" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Text input" rows="5">
            </textarea>
        </div>
        <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Save
        </button>
      </form>
</body>
</html>
