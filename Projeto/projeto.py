import psycopg2

def get_connection():
    return psycopg2.connect(
        host = '127.0.0.1',
        port = '5432',
        user = 'postgres',
        password = '123456',
        database = 'mydb')
    
conn = get_connection()

cur = conn.cursor()

cur.execute("SELECT * FROM tb_produto")
#cur.execute("SELECT * FROM tb_produto;
# INSERT INTO tb_produto (tipoproduto, precoproduto, fabricante)
# VALUES ('regata', '95.00','puma');")
#
#SELECT tipoproduto,codproduto FROM tb_produto
#WHERE codproduto > 10
#ORDER BY codproduto;

records = cur.fetchall()

print(records)
