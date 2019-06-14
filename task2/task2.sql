

SELECT 
DISTINCT(cat.name)  AS category
	FROM categories cat 
	JOIN category_product c_p ON c_p.category_id = cat.id
	WHERE c_p.product_id  IN(9, 14, 6, 7, 2) 

SELECT cat.name AS category, pr.name AS product, pr.price, pr.quantity
	FROM categories cat
	JOIN category_product c_p ON c_p.category_id = categories.id
	JOIN products pr ON pr.id = c_p.product_id
	WHERE cat.id = 2 OR cat.parent_id = 2
	
SELECT DISTINCT
	cat.id,cat.name,
COUNT(DISTINCT c_p.product_id) AS count
FROM categories cat
	JOIN category_product c_p ON c_p.category_id = cat.id
	WHERE cat.id IN (2,3,4)
	GROUP BY cat.name

SELECT * FROM `products` 
WHERE products.id IN (
		SELECT category_product.product_id FROM category_product 
    		WHERE category_product.category_id=16 AND category_product.product_id IN(
            SELECT category_product.product_id FROM category_product
                WHERE category_id = 17 AND category_product.product_id IN(
                SELECT category_product.product_id FROM category_product
                    WHERE category_product.category_id = 18
                )
            )
)
