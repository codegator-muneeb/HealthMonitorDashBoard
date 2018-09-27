#extracting from different sources
def etl(file):
    tb1 = list()
    import petl as etl
    import sqllite3
    if ".csv" in file:
    	tb1 = etl.fromcsv(file)
    elif ".json" in file:
    	tb1 = etl.fromjson(file)	
    elif ".xls" in file:
    	tb1 = etl.fromxls(file)
    elif ".xml" in file:
    	tb1 = etl.fromxml(file,"row")

#loading into the databse
def load(tb1): 

  
