<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>

        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>Confirm</h2>
            </div>
            <!--フォーム-->
            <form class="form" action="/thanks" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <!--一段目-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" />
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                            </td>
                        </tr>
                        <!--2段目-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />

                                <!--<td class="confirm-table__text">
                                <input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly />
                            </td>
                            -->
                        </tr>
                        <!--3段目-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                        </tr>
                        <!--4段目-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                            </td>
                        </tr>
                        <!--5段目-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="address" readonly />
                            </td>
                        </tr>
                        <!--6段目-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="building" readonly />
                            </td>
                        </tr>
                        <!--7段目-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <input type="text" name="category_id" value="{{ $contact['category_id'] }}" readonly />
                            </td>
                        </tr>
                        <!--8段目-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <!--ボタン-->
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                    <button class="form__button-correct" type="submit">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>