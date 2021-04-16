<?php
switch ( $args['payment_method'] ) {
    case 'Check payments' :
        echo '<img src="https://demo.templatetrend.com/prestashop/PRS375/modules/ttpaymentbannerblock/views/img/payment1.png" alt="Check Payment" width="auto" height="auto">';
    break;

    case 'PayPal Standard' :
        echo '<img src="https://demo.templatetrend.com/prestashop/PRS375/modules/ttpaymentbannerblock/views/img/payment2.png" alt="PayPal" width="auto" height="auto">';
    break;

    case 'Cash on delivery' :
        echo '<img src="https://demo.templatetrend.com/prestashop/PRS375/modules/ttpaymentbannerblock/views/img/payment3.png" alt="Cash on delivery" width="auto" height="auto">';
    break;

    case 'Direct bank transfer' :
        echo '<img src="https://demo.templatetrend.com/prestashop/PRS375/modules/ttpaymentbannerblock/views/img/payment4.png" alt="Direct bank transfer" width="auto" height="auto">';
    break;

    default :
        return '';
    break;
}