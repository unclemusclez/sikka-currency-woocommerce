add_filter( 'woocommerce_currencies', 'sikka_currency' );

function sikka_currency( $currencies ) {
     $currencies['SIKKA'] = __( 'Sikka', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'sikka_symbol', 10, 2);

function sikka_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'SIKKA': $currency_symbol = '$'; break;
     }
     return $currency_symbol;
}