<x-head>
    <table class="table">
        <thead>
        <tr>
            <th style="width: 30px;border: 1px solid black;" scope="col">Rasmi</th>
            <th style="width: 30px;border: 1px solid black;" scope="col">Nomi</th>
            <th style="width: 30px;border: 1px solid black;" scope="col">Narxi</th>
            <th style="width: 30px;border: 1px solid black;" scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $datas)
                <?php

                $yubor[] = $datas['product_price'];


                ?>
            <tr>

                    <?php
                    $a = json_decode($datas['product_photos']);
                foreach ($a as $fotos){
                    $split = explode(".png", $fotos);
                    ?>
                <td style="width: 30px;border: 1px solid black;text-align: center;"><img style="width: 100%;height: 100%;" class="cart__image"
                         src="/product-photos/{{ $split[0] }}.png"
                         alt="Beats Solo3 Wireless Headphones Beats" width="70"
                         height="72" loading="lazy"></td>
                    <?php
                }
                    ?>
                <th style="width: 30px;border: 1px solid black;text-align: center;">  {{ $datas['product_name'] }}</th>
                <td style="width: 30px;border: 1px solid black;text-align: center;">  {{ $datas['product_price'] }}</td>
                <td style="width: 30px;border: 1px solid black;text-align: center;"><div>
   <button onclick="{{ $datas['product_id'] }}" id="plusButton">+</button>
  <input value="1" id="numberInput"/>
  <button id="minusButton">-</button>
</div>
</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
  textInput = document.querySelector('#numberInput');
  plusButton = document.querySelector('#plusButton');
  minusButton = document.querySelector('#minusButton');
  plusButton.onclick = () => textInput.value = parseInt(textInput.value) + 1;
  minusButton.onclick = () => textInput.value = parseInt(textInput.value) - 1;
</script>
</x-head>
