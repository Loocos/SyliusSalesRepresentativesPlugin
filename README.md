# Sylius Sales Representatives Plugin

[![Latest Version][ico-version]][link-packagist]
[![Latest Unstable Version][ico-unstable-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]

This plugin for [Sylius](https://sylius.com/) allows you to manage sales representatives.

Supports Doctrine ORM driver only.

## Screenshots

Sales Representatives:

![Screenshot showing admin sales representatives](docs/images/admin-sales-representative-index.png)

Customer:

![Screenshot showing admin customer](docs/images/admin-customer-edit.png)

## Installation

### Step 1: Install the plugin

Open a command console, enter your project directory and execute the following command to download the latest stable version of this plugin:

```bash
$ composer require tavy315/sylius-sales-representatives-plugin
```

This command requires you to have Composer installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

### Step 2: Enable the plugin

Then, enable the plugin by adding it to the list of registered plugins/bundles in `config/bundles.php` file of your project:

```php
<?php
$bundles = [
    Tavy315\SyliusSalesRepresentativesPlugin\Tavy315SyliusSalesRepresentativesPlugin::class => ['all' => true],
];
```

### Step 3: Configure the plugin
```yaml
# config/packages/tavy315_sylius_sales_representatives.yaml

imports:
    - { resource: "@Tavy315SyliusSalesRepresentativesPlugin/Resources/config/app/config.yaml" }
```

### Step 4: Customize models

Read more about Sylius models customization [here](https://docs.sylius.com/en/latest/customization/model.html).

#### Customize your Customer model

Add a `Tavy315\SyliusSalesRepresentativesPlugin\Model\Customer\SalesRepresentativeTrait` trait to your `App\Entity\Customer\Customer` class.

- If you use `annotations` mapping:

    ```php
    <?php 
    // src/Entity/Customer/Customer.php
    
    namespace App\Entity\Customer;

    use Doctrine\ORM\Mapping as ORM;
    use Sylius\Component\Core\Model\Customer as BaseCustomer;
    use Tavy315\SyliusSalesRepresentativesPlugin\Model\Customer\SalesRepresentativeAwareInterface;
    use Tavy315\SyliusSalesRepresentativesPlugin\Model\Customer\SalesRepresentativeTrait;
      
    /**
     * @ORM\Entity
     * @ORM\Table(name="sylius_customer")
     */
    class Customer extends BaseCustomer implements SalesRepresentativeAwareInterface
    {
        use SalesRepresentativeTrait;
    }
    ```

### Step 5: Update your database schema

```bash
$ php bin/console doctrine:migrations:diff
$ php bin/console doctrine:migrations:migrate
```
 
## Usage

From now, you can attach a sales representative to any customer; our use case is to send a copy of the order confirmation email when customer makes an order.

[ico-version]: https://poser.pugx.org/tavy315/sylius-sales-representatives-plugin/v/stable
[ico-unstable-version]: https://poser.pugx.org/tavy315/sylius-sales-representatives-plugin/v/unstable
[ico-license]: https://poser.pugx.org/tavy315/sylius-sales-representatives-plugin/license
[ico-github-actions]: https://github.com/tavy315/SyliusSalesRepresentativesPlugin/workflows/build/badge.svg
[ico-code-quality]: https://img.shields.io/scrutinizer/g/tavy315/SyliusSalesRepresentativesPlugin.svg

[link-packagist]: https://packagist.org/packages/tavy315/sylius-sales-representatives-plugin
[link-github-actions]: https://github.com/tavy315/SyliusSalesRepresentativesPlugin/actions
