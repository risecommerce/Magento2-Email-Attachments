<h3><a target="_blank" href="https://risecommerce.com/">RiseCommerce</a></h3>
<a target="_blank" href="https://risecommerce.com/"><img width="100%" height="208" src="https://risecommerce.com/media/wysiwyg/logowithtext.png"></a>

##WhatsApp Chat Extension

<a href="https://risecommerce.com/magento2-sales-email-invoice-shipments-attachment.html"><img width="190" height="70" src="https://risecommerce.com/media/wysiwyg/risedownload.png"></a>


Risecommerce_EmailAttachments provides seamless file sharing within emails, streamlining communication with secure and efficient attachment handling for enhanced productivity and collaboration. Elevate your email experience with easy access to important documents, fostering a smoother workflow for your business.

 <a target="_blank" href="https://demo.risecommerce.com/"> <img width="190" height="70" src="https://risecommerce.com/media/wysiwyg/frontend-demo.png"> </a>
 <a target="_blank" href="https://demo.risecommerce.com/admindemo"> <img width="190" height="70" src="https://risecommerce.com/media/wysiwyg/Backend-Demo.png"> </a>


##Support: 
version - 2.3.*,2.4.*

##How to install Extension

<h4>Method I:</h4>
<p>1. Download the archive file.</p>
<p>2. Unzip the file</p>
<p>3. Create a folder [Magento_Root]/app/code/Risecommerce/EmailAttachments</p>
<p>4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/EmailAttachments'</p>

<h4>Method II:</h4>

Using Composer

```
composer require risecommerce/magento-2-email-attachments-extension:1.2.0

```

<h4>Enable Extension:</h4>

```
 php bin/magento module:enable Risecommerce_EmailAttachments
 php bin/magento setup:upgrade
 php bin/magento cache:clean
 php bin/magento setup:static-content:deploy
 php bin/magento cache:flush
```

<h4>Disable Extension:</h4>

```
 php bin/magento module:disable Risecommerce_EmailAttachments
 php bin/magento setup:upgrade
 php bin/magento cache:clean
 php bin/magento setup:static-content:deploy
 php bin/magento cache:flush
```

 <h3>Configuration:</h3>
<img width="830" height="430" src="https://risecommerce.com/media/wysiwyg/EmailConfiguration.png">
