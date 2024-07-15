TYPE=VIEW
query=select row_number() over ( order by `p`.`id_product`) AS `rownum`,`p`.`id_product` AS `id_product`,`s`.`amount_sold` AS `amount_sold`,group_concat(`r`.`UnitPrice` separator \',\') AS `GROUP_CONCAT(r.UnitPrice)`,ifnull(concat(round(avg(`r`.`UnitPrice`),0),\' ฿\'),\'-\') AS `average_cost_unitprice`,group_concat(`s`.`Price_Sold` separator \',\') AS `GROUP_CONCAT(s.Price_Sold)`,ifnull(concat(round(avg(`s`.`Price_Sold`),0),\' ฿\'),\'-\') AS `average_cost_soldprice`,ifnull(concat(round(avg(`s`.`Price_Sold`) - avg(`r`.`UnitPrice`),0),\' ฿\'),\'-\') AS `profit`,ifnull(concat(round((avg(`s`.`Price_Sold`) - avg(`r`.`UnitPrice`)) / avg(`s`.`Price_Sold`) * 100,2),\' %\'),\'-\') AS `percent_profit` from ((`dbms_checkstock`.`product_details` `p` left join `dbms_checkstock`.`rawmaterialorder` `r` on(`p`.`id_product` = `r`.`ProductID`)) left join `dbms_checkstock`.`sold_products` `s` on(`p`.`id_product` = `s`.`id_product`)) group by `p`.`id_product`
md5=221119ef98951f71b9401949b14e850e
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2023-02-22 07:47:08
create-version=2
source=SELECT ROW_NUMBER() OVER (ORDER BY p.id_product) as rownum,\np.id_product,\ns.amount_sold,\nGROUP_CONCAT(r.UnitPrice),\nIFNULL(CONCAT(ROUND(AVG(r.UnitPrice),0),\' ฿\'),\'-\') AS average_cost_unitprice,\nGROUP_CONCAT(s.Price_Sold),\nIFNULL(CONCAT(ROUND(AVG(s.Price_Sold),0),\' ฿\'),\'-\') AS average_cost_soldprice,\nIFNULL(CONCAT(ROUND((AVG(s.Price_Sold) -AVG(r.UnitPrice)),0),\' ฿\'),\'-\') AS profit,\nIFNULL(CONCAT(ROUND(((((AVG(s.Price_Sold) -AVG(r.UnitPrice))/AVG(s.Price_Sold))*100)),2),\' %\'),\'-\') AS percent_profit\nFROM product_details AS p\nLEFT OUTER JOIN rawmaterialorder AS r ON p.id_product = r.ProductID\nLEFT OUTER JOIN sold_products AS s ON p.id_product = s.id_product\nGROUP BY p.id_product
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select row_number() over ( order by `p`.`id_product`) AS `rownum`,`p`.`id_product` AS `id_product`,`s`.`amount_sold` AS `amount_sold`,group_concat(`r`.`UnitPrice` separator \',\') AS `GROUP_CONCAT(r.UnitPrice)`,ifnull(concat(round(avg(`r`.`UnitPrice`),0),\' ฿\'),\'-\') AS `average_cost_unitprice`,group_concat(`s`.`Price_Sold` separator \',\') AS `GROUP_CONCAT(s.Price_Sold)`,ifnull(concat(round(avg(`s`.`Price_Sold`),0),\' ฿\'),\'-\') AS `average_cost_soldprice`,ifnull(concat(round(avg(`s`.`Price_Sold`) - avg(`r`.`UnitPrice`),0),\' ฿\'),\'-\') AS `profit`,ifnull(concat(round((avg(`s`.`Price_Sold`) - avg(`r`.`UnitPrice`)) / avg(`s`.`Price_Sold`) * 100,2),\' %\'),\'-\') AS `percent_profit` from ((`dbms_checkstock`.`product_details` `p` left join `dbms_checkstock`.`rawmaterialorder` `r` on(`p`.`id_product` = `r`.`ProductID`)) left join `dbms_checkstock`.`sold_products` `s` on(`p`.`id_product` = `s`.`id_product`)) group by `p`.`id_product`
mariadb-version=100425
