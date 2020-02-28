import os

pasta = "xsd"
caminhos = [os.path.join(pasta, nome) for nome in os.listdir(pasta)]
arquivos = [arq for arq in caminhos if os.path.isfile(arq)]
xsds = [arq for arq in arquivos if arq.lower().endswith(".xsd")]
for xsd in xsds:
    val1= xsd.split('.xsd')[0]
    val2= val1.split('xsd\\')[1]
    print(val2)
