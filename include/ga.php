<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $o['AnalyticsId']; ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', '<?php echo $o['AnalyticsId']; ?>');
    gtag('config', '<?php echo $o['AdwordsId']; ?>');
</script>
<script type='text/javascript'>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
    (function () {
        var gads = document.createElement('script');
        gads.async = true;
        gads.type = 'text/javascript';
        var useSSL = 'https:' == document.location.protocol;
        gads.src = (useSSL ? 'https:' : 'http:') +
            '//www.googletagservices.com/tag/js/gpt.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(gads, node);
    })();
</script>
<script type='text/javascript'>
    googletag.cmd.push(function () {
        googletag.defineSlot('/127817812/How_About_Bottom_728x90', [728, 90], 'div-gpt-ad-1353715793997-0').addService(googletag.pubads());
        googletag.defineSlot('/127817812/How_About_Top_728x90', [728, 90], 'div-gpt-ad-1353715793997-1').addService(googletag.pubads());
        googletag.defineSlot('/127817812/How_Index_Bottom_728x90', [728, 90], 'div-gpt-ad-1355537191471-0').addService(googletag.pubads());
        googletag.defineSlot('/127817812/How_Index_Right_336x280', [336, 280], 'div-gpt-ad-1355537191471-1').addService(googletag.pubads());
        googletag.defineSlot('/127817812/How_Index_Top_728x90', [728, 90], 'div-gpt-ad-1355537191471-2').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
</script>