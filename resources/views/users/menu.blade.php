<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('store_id'))
    <p>{{session('store_id')}}</p>
    <p>@json(session('store_id'))</p>
    <p>ログイン成功</p>
    @endif
    {{$seat}}
    <dialog id="dialog">
        <div class="js-selectbox"></div>
        <menu class="menu"></menu>
    </dialog>
    <output aria-live="polite">
    <script>
        let seats = @json($seat);
        const jsSelectBox = document.querySelector('.js-selectbox');
        const selectWrap = document.createElement('div');
        let select = document.createElement('select');
        let dialog = document.getElementById('dialog');
        const menu = document.querySelector('.menu');
        const confirmbtn = document.createElement('button');
        confirmbtn.textContent="確定"

        for(const seat of seats) {
            console.log(seat);
            console.log(seat['seat_number']);
            let option = document.createElement('option');
            option.value = seat['id']
            option.textContent = seat['seat_number']
            select.appendChild(option)
        }
        // console.log(seat);
        selectWrap.appendChild(select);
        jsSelectBox.appendChild(selectWrap);
        menu.appendChild(confirmbtn);

        dialog.showModal();

        select.addEventListener('change', function onSelect(e) {
            console.log(select.value);
        });

        let sel_value = select.value;
        confirmbtn.addEventListener('click', () => {
            dialog.close();
            console.log('2回目'+select.value);
            console.log('閉じたよ');
        });

    </script>
</body>
</html>