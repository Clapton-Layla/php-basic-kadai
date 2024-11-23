<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            
            function printnums(){
                print('昇順にソートします。'.'<br>');
                $nums = [15,4,18,23,10];
                sort($nums);
                foreach($nums as $value){
                    print($value.'<br>');
                }

                print('降順にソートします。'.'<br>');
                rsort($nums);
                foreach($nums as $value){
                    print($value.'<br>');
                }
            }

            printnums();

        ?>
    </p>
</body>

</html>
