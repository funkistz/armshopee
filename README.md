# Woocommerce

PHP based API for woocommerce 

easily call with Http request with required headers and optional parameters data.
can be use at any platform without any extra authentication plugins such as OAuath.

# Requirements

Headers (required)

- url : your website name
- consumer_key : api key
- consumer_secret : api secret
- api : request api (refer to documentation below)

Parameters (optional)

- parameter name and value

HTTP methos

- get, post, put or delete

# API list

## listing (GET method)

use

- products
- coupons
- customers
- orders
- products/<product_id>/variations
- products/attributes
- products/attributes/<attribute_id>/terms
- products/categories
- products/shipping_classes
- products/tags
- products/<product_id>/reviews

just add '/object-id' at the end to retrieve one specific object

example : 'products/1'

## filter listing (GET method)

use 

- same as create

add HTTP parameter such as 'category' with value 'category-id' (can add multiple condition)

example : url: 'products', http parameter: category = 1

## create (POST method)

use

- products
- coupons
- customers
- orders
- products/<product_id>/variations
- products/attributes
- products/attributes/<attribute_id>/terms
- products/categories
- products/shipping_classes
- products/tags

and required HTTP parameter such as name, type, regular_price, description, images

example : url: 'products', 
          http parameter: 
          
          - name = 'product_name'
          - type = 'simple'
          - categories =  
                          ['id' => 1],
                          ['id' => 2]
                         ]
                          
          - images = 
                      [
                        'src' => '',
                        'position' => 0
                      ],
                      [
                        'src' => '',
                        'position' => 1
                      ]
                     ]
          

## update (PUT method)

use

- products/<id>
- coupons/<d>
- customers/<id>
- orders/<id>
- products/<product_id>/variations/<id>
- products/attributes/<id>
- products/attributes/<attribute_id>/terms/<id>
- proucts/categories/<id>
- products/shipping_classes/<id>
- products/tags/<id>

and HTTP parameter which is the object data that you want to update 

example : same as create with additional object id at the last url

## delete (DELETE method)

use 

- same as update

example : same as update

## batch update (POST method)

use

- same as create with additional '/batch' at the end

parameter need to be either 'update' or 'create'

example : url : 'products/batch'
          parameter = 
          'create' => [
                        [
                          'name' => ''
                          ...
                        ]
                      ],
          'update' => [
                        [
                          'id' => 1
                          'name' => ''
                          ...
                        ]
                      ]
          
          
        
          
          
          

