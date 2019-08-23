<h1>
  サンプル見出し
</h1>
<p>
  フォームの送信
</p>
<form method="get" action="./sendForm">
  <input type="hidden" name="check1" value="off">
  <input type="hidden" name="radio1" value="off">
  <input type="checkbox" id="c1" name="check1">
  <label for="c1">
    チェック
  </label>
  <br>
  <input type="radio" id="r1" name="radio1" value="No. 1">
  <label for="r1">
    ラジオ１
  </label>
  <br>
  <input type="radio" id="r2" name="radio1" value="No. 2">
  <label for="r2">
    ラジオ２
  </label>
  <br>
  <select name="select1">
    <option value="Windows">
      Windows
    </option>
    <option value="Linux">
      Linux
    </option>
    <option value="macOS">
      macOS
    </option>
  </select>
  <input type="submit">
</form>