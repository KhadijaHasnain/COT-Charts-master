<?php
/*
Plugin Name: TradingView Chart Widget
Description: Embed TradingView chart using shortcode.
Version: 1.0
Author: Rao Azwar
*/

function tradingview_chart_shortcode() {
    ob_start(); // Start output buffering
    
    ?>
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div id="tradingview_widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget({
                "width": 980,
                "height": 610,
                "symbol": "NASDAQ:AAPL",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "light",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "save_image": false,
                "container_id": "tradingview_widget"
            });
        </script>
    </div>
    <!-- TradingView Widget END -->
    <?php
    
    return ob_get_clean(); // Return the buffered content
}

// Register the shortcode
add_shortcode('tradingview_chart', 'tradingview_chart_shortcode');
