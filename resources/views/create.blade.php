<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>事例集</title>
  </head>
  <body>

    <div class="container">
        <h1>一覧</h1>
        <form action="store" method="POST">
            @csrf

            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <li>{{ $error }}</li>
                        </div>
                    @endforeach
                </ul>
            </div>
            <div class="mb-3">
                <label for="DataList" class="form-label">商品</label>
                <input class="form-control" list="datalistOptions" id="DataList" placeholder="商品を選択">
                <datalist id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
            </div>
            <div class="mb-3">
                <label for="InputDetail" class="form-label">事例詳細</label>
                <input type="text" class="form-control" id="InputDetil">
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">画像</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="mb-3">
                <label for="InputMailTemp" class="form-label">メール文</label>
                <input type="text" class="form-control" id="InputMailTemp" >
            </div>
            <div class="mb-3">
                <label for="InputEtc" class="form-label">備考</label>
                <input type="etc" class="form-control" id="InputEtc" >
                
            </div>
            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>