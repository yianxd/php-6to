
class metodosPago:
    def __init__(self, nombre):
        self.nombre = nombre

    def getNombreM(self):
        return self.nombre

class cliente:
    def __init__(self, nombre):
        self.nombre = nombre
        self.metodosPagos =[]

    def agregarMetodo(self, metodoPago):
        self.metodosPagos.append(metodoPago)
    
    def getMetodo(self):
        return self.metodosPagos


        
        
mP1= metodosPago('efectivo')
mP2= metodosPago('tarjeta')
mP3= metodosPago('otro...')

cl1= cliente('a')
cl2= cliente('b')
cl3= cliente('c')


cl1.agregarMetodo(mP1)
cl1.agregarMetodo(mP2)

for i in cl1.getMetodo():
    print(i.getNombreM())