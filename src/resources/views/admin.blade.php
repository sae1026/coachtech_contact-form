<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
        <ul class="header-nav">
            <li class="header-nav__item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="header-nav__button" href="/login">logout</button>
                </form>
            </li>
        </ul>
    </header>

    <mein>
        <div class="admin-form__content">
            <div class="admin-form__heading">
                <h2>Admin</h2>
            </div>

            <div class="admin-form">
                <form class="form">
                    <div class="search-form__item">
                        <!--名前・メアド検索-->
                        <input class="search-form__item-input" type="text" placeholder="名前やメールアドレスを入力してください" />
                        <!--性別検索-->
                        <select class="search-form__item-select">
                            <option value="">性別</option>
                        </select>
                        <!--カテゴリ検索-->
                        <select class="search-form__item-select">
                            <option value="">お問い合わせの種類</option>
                        </select>
                        <!--カレンダー検索-->
                        <input class="search-form__item-input" type="date" name="calendar" max="99" placeholder="年/月/日" />

                        <button class="search-form__button-submit" type="submit">検索</button>

                        <button class="search-form__button-reset" type="submit">リセット</button>
                    </div>

                    <div>
                        <!--多分できませんエクスポート機能-->
                        <button class="export-button" type="submit">エクスポート</button>

                        <!--ページネーションやり方確認-->
                    </div>
                </form>

            </div>

            <div class="admin-table">
                <table class="admin-table__inner">
                    <tr class="admin-table__row">
                        <div class="admin-table__header">
                            <th class="admin-table__header-span">お名前</th>
                            <th class="admin-table__header-span">性別</th>
                            <th class="admin-table__header-span">メールアドレス</th>
                            <th class="admin-table__header-span">お問い合わせの種類</th>
                        </div>
                    </tr>


                    @foreach($contacts as $contact)
                    <tr class="admin-table__row">
                        <div class="admin-table__item">
                            <td type="text" name="first_name" value="">{{$contact->name}}
                            </td>
                            <td type="text" name="gender" value="" >{{$contact->gender}}
                            </td>
                            <td type="text" name="email" value="">{{$contact->email}}
                            </td>
                            <td type="text" name="category_id" value="">{{$contact->category_id}}
                            </td>

                            <td>
                                <button class="admin-table__button-submit" type="submit">
                                    詳細
                                </button>
                            </td>
                        </div>
                    </tr>
                    @endforeach
                </table>
            </div>
    </mein>
</body>

</html>