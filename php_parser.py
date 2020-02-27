import re
p = re.compile("^([A-Z][0-9]+)+$")

class TipoElemento:
    def __init__(self):
        self.nomeAtributo = None
        self.tipoAtributo = None
        
    def setNomeAtributo(self, nomeAtributo):
        self.nomeAtribut0 = nomeAtributo

    def setTipoAtributo(self, tipoAtributo):
        self.tipoAtributo = tipoAtributo

    def getNomeAtributo(self):
        return self.nomeAtributo

    def getTipoAtributo(self):
        return self.tipoAtributo

class Elemento:
    def __init__(self):
        self.nomeClasse = None
        self.atributos = []
        
    def setNomeClasse(self, nomeClasse):
        self.nomeClasse = nomeClasse

    def setNomeAtributo(self, atributos):
        self.atributos.append(atributos)

    def getNomeClasse(self):
        return self.nomeClasse

    def getNomeAtributo(self):
        return self.atributos

ref_arquivo = open("tr_020_resumo_de_acoes_civeis.xsd","r")
linhas = ref_arquivo.readlines()
elem = Elemento()
tipoDado = TipoElemento()
'''
for linha in linhas:
    if '<xs:element name="resumo_de_acoes_civeis">' in linha:
        print('public class', linha.split()[1].split('name="')[1].split('">')[0], '{')
'''
'''
for linha in linhas:

    if (re.search('<xs:element name="', linha, re.IGNORECASE)):
        if (re.search('element', linha, re.IGNORECASE)):
            val = linha.split('name="')[1]
            val2 = val.split('">')
            elem.setNomeClasse(val2[0])
            print(elem.getNomeClasse())
            if (re.search('element', linha, re.IGNORECASE)):
                if (re.search('type', linha, re.IGNORECASE)):
                    propriedade = linha.split(' ')
                    for item in propriedade:
                        #if (re.search('type', item, re.IGNORECASE)):
                        #    val = item.split('type="xs:')[1]
                        #    tipoDado.setTipoAtributo(val.split('"')[0])
                        #    print(tipoDado.getTipoAtributo())
                        if (re.search('name', item, re.IGNORECASE)):
                            val = item.split('name="')[1]
                            print('VAL ', val.split('"')[0])
                            tipoDado.setNomeAtributo(val.split('"')[0])
                            print(tipoDado.getNomeAtributo())
                        print(tipoDado.getTipoAtributo(), tipoDado.getNomeAtributo())
            else:
                print()
        else:
            print()
    else:
        print()
'''
for linha in linhas:
    elemento = linha.split()
    #print(len(elemento))
    print(elemento)

    for ele in elemento:
        if (re.search('<xs:element', elemento, re.IGNORECASE) != None):
            if (re.search('type="', elemento, re.IGNORECASE) == None):
                val = ele.split('name="')[1]
                val2 = val.split('">')
                elem.setNomeClasse(val2[0])
                print(elem.getNomeClasse())
                for elemento2 in linha:
                    print(elemento2)
                    if ((re.search('<xs:element', elemento2, re.IGNORECASE) != None) and (re.search('/>', elemento2, re.IGNORECASE) != None)):
                        if (re.search('/>', elemento2, re.IGNORECASE)):
                            print('teste')
                            if (re.search('type', elemento2, re.IGNORECASE)):
                                val = elemento2.split('type="xs:')[1]
                                tipoDado.setTipoAtributo(val.split('"')[0])
                                print('Val', tipoDado.getTipoAtributo())
                            if (re.search('name', elemento2, re.IGNORECASE)):
                                val = elemento2.split('name="')[1]
                                print('VAL ', val.split('"')[0])
                                tipoDado.setNomeAtributo(val.split('"')[0])
                                print(tipoDado.getNomeAtributo())
                                elem.setNomeAtributo(tipoDado)
                                break
            else:
                print('type', ele)
        else:
            #print('element', ele)
            break
        print(tipoDado.getTipoAtributo(), tipoDado.getNomeAtributo())
        '''
            if (re.search('<xs:element', ele, re.IGNORECASE)):
                if (re.search('type', linha, re.IGNORECASE)):
                    propriedade = linha.split()
                    for item in propriedade:
                        if (re.search('type', item, re.IGNORECASE)):
                            val = item.split('type="xs:')[1]
                            tipoDado.setTipoAtributo(val.split('"')[0])
                            print('Val', tipoDado.getTipoAtributo())
                        if (re.search('name', item, re.IGNORECASE)):
                            val = item.split('name="')[1]
                            print('VAL ', val.split('"')[0])
                            tipoDado.setNomeAtributo(val.split('"')[0])
                            print(tipoDado.getNomeAtributo())
                        print(tipoDado.getTipoAtributo(), tipoDado.getNomeAtributo())
                    '''
