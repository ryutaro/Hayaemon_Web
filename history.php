<?php
$set['PageTitle'] = '更新履歴';
$set['column'] = 'one';
$set['type'] = 'history';
include('config.inc.php');

include('./include/functions.php');
include('./include/header.php');
$date = @$_GET['date'];
?>
    <style>
        h3 {
            border-top         : 3px solid;
            border-image       : linear-gradient(to right, rgba(128, 128, 128, 1) 0%, rgba(128, 128, 128, 1) 30%, rgba(128, 128, 128, 0.1) 100%);
            border-image-slice : 1;
            padding-top        : 10px;
            padding-bottom     : 10px;
        }

        .history {
            padding-bottom : 20px;
        }

        li {
            list-style-position : outside;
        }

        .cal.disable {
            color : #ccc;
        }
    </style>

    <div style="border:1px solid #e0e0e0;border-radius:5px">
        <div class="font15" style="margin:20px 25px 40px 25px; line-height: 150%;text-align:left;">
            <div style="margin-left:60px;margin-right:60px">
                <div class="font20" style="text-align:left;margin-bottom:40px;">
                    <h2 id="PageTitle" style="text-align:center;"><?php echo $o['PageTitle']; ?></h2>
                    <br>
                    <br>
                    <div id="cal">
						<?php echo GetCalender(); ?>
                    </div>
                    <br>
					<?php echo GetHistory($date); ?>
                </div>
            </div>
        </div>
    </div>
<?php
if(is_numeric($date) && '6' == strlen($date)) {
	$date = substr_replace($date, '/', 4, 0);
	$date .= '/01';
	$date_mon = date("m", strtotime($date));
	$date_year = date("Y", strtotime($date));
	$o['PageTitle'] = "<a href='${o['Url']}/history.php'>更新履歴</a> &gt; <a href='${o['Url']}/history.php?date=${date_year}'>${date_year}年</a> &gt; ${date_mon}月";
}
if(is_numeric($date) && '4' == strlen($date)) {
	$date_year = $date;
	$o['PageTitle'] = "<a href='${o['Url']}/history.php'>更新履歴</a> &gt; ${date_year}年";
}
include('./include/footer.php');
?>