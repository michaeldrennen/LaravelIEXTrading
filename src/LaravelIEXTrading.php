<?php
namespace MichaelDrennen\LaravelIEXTrading;

use MichaelDrennen\IEXTrading\IEXTrading;
use MichaelDrennen\IEXTrading\Responses\StockChart;

class LaravelIEXTrading {


    public static function stockChart( string $ticker, string $option, string $date = NULL ): StockChart {
        $uri = 'stock/' . $ticker . '/chart/' . $option;

        switch ( $option ):
            case '5y':
            case '2y':
            case '1y':
            case 'ytd':
            case '6m':
            case '3m':
            case '1m':
            case '1d':
            case 'dynamic':
                $response = IEXTrading::makeRequest( 'GET', $uri );
                break;
            case 'date':
                $uri      .= '/' . $date;
                $response = IEXTrading::makeRequest( 'GET', $uri );
                break;
            default:
                throw new InvalidStockChartOption( "When calling stockChart() you passed in [" . $option . "] as an option. Valid values are 5y, 2y, 1y, ytd, 6m, 3m, 1m, 1d, date, and dynamic." );

        endswitch;

        return new StockChart( $response, $option, $date );
    }
}