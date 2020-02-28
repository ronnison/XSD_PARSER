import re
import os
p = re.compile("^([A-Z][0-9]+)+$")

class Atributo:

    def __init__(self, *args, **kwargs):
        self.__lista = []
        

    def add_atributo(self, value):
        self.__lista.append(value)

    @property
    def lista(self):
        return self.__lista


    def get_on_lista(self, index):
        if index > len(self.__lista):
            raise RuntimeError("Index maior que a lista")

        try:
            return self.__lista[index]
        except IndexError:
            return self.__lista[-1]
    
    ''' Versao 0
    def __init__(self):
        self.__nome = []
        self.__tipo = []

    @property
    def nome (self):
        return self.__nome

    @property
    def tipo (self):
        return self.__tipo

    @nome.setter
    def nome(self, nome):
        self.__nome.append(nome)

    @tipo.setter
    def tipo(self, tipo):
        self.__tipo.append(tipo)
    '''

class Classe:
    
    def __init__(self):
        self.__nome = None
        self.__atributo = Atributo()
        
    
    @property
    def nome (self):
        return self.__nome

    @property
    def atributo(self):
        return self.__atributo


    @property
    def lista(self):
        return self.__atributo.lista
    
    @nome.setter
    def nome(self, nome):
        self.__nome = nome

    @atributo.setter
    def atributo(self, atributo):
        if not isinstance(atributo, Atributo):
            raise Runtime("O parâmetro deve ser do tipo {}".format(Atributo.__class__))
        self.__atributo = atributo
        

    def get_atributo(self, index):
        #return self.__atributo.get_on_lista(index)
        return [element for i, element in self.__atributo.lista if i == index]
        '''
        for i


        , element in enumerate(self.__atributo.lista):
            if i == index:
                return element

        for i in range(len(self.__atributo.lista)):
            self.__atributo.lista[i]

        return [element for i, element in self.__atributo.lista if i == index]
        '''


ref_arquivo = open("tr_020_resumo_de_acoes_civeis.xsd","r")
linhas = ref_arquivo.readlines()
classe = Classe()
atrib = Atributo()
i = 0

for linha in linhas:
    elemento = linha.split()

    if len(elemento) > 0:
        if '<xs:element' == str(elemento[0]):
            entidade = elemento
            #print(entidade)
            #for elem in entidade:
            if len(entidade) > 0:
                if i == 0:
                    val = entidade[1].split('name="')
                    val2 = val[1].split('"')
                    #print(str(val2[0]))
                    classe.nome = val2[0]
                    #print(classe.nome)
                    i=1
                else:
                    val = entidade[2].split('type="xs:')
                    val2 = val[1].split('"')
                    #print(val2[0])
                    attrib1 = val2[0]
                    
                    val = entidade[1].split('name="')
                    val2 = val[1].split('"')
                    #print(val2)
                    attrib1 = attrib1 + ' ' + val2[0]
                    atrib.add_atributo(attrib1)
                    #print(attrib.getLista())

classe.atributo = atrib

arq = open (classe.nome + '.php', 'w')

#print('<?php\npublic class ' + classe.nome + ' {')
arq.write('<?php\npublic class ' + classe.nome + ' {')
#print('')
arq.write('\n')
#count = 0
for i in classe.lista:
    list = i.split();
    #count = int(count) + 1
    #print('\tpublic $' + list[1])
    arq.write('\tpublic $' + list[1] + ';')
    arq.write('\n')
#print('\n\t// Methods Getter and Setter')
arq.write('\n\t// Methods Construtor and Destrutor')
arq.write('\n')
arq.write('\tfunction __construct ($' + classe.get_on_lista[0] + ', $' + classe.get_on_lista[1] ';')
arq.write('\n')
for i in classe.lista:
    list = i.split();
    arq.write('\tfunction __construct (' + list[1] + ';')
    arq.write('\n')
    
arq.write('\n\t// Methods Getter and Setter')
for i in classe.lista:
    list = i.split();
    #print('\tfunction set_name($' + list[1] + ') {')
    arq.write('\n\tfunction set_' + list[1] + '($' + list[1] + ') {')
    arq.write('\n')
    #print('\t\t$this->'+ list[1] + ' = $' + list[1] + ';')
    arq.write('\t\t$this->'+ list[1] + ' = $' + list[1] + ';')
    arq.write('\n')
    #print('\t}')
    arq.write('\t}')
    arq.write('\n')
    #print('\tfunction get_' + list[1] + '() {')
    arq.write('\tfunction get_' + list[1] + '() {')
    arq.write('\n')
    #print('\t\treturn $this->' + list[1] + ';')
    arq.write('\t\treturn $this->' + list[1] + ';')
    arq.write('\n')
    #print('\t}')
    arq.write('\t}')
#print('')
arq.write('\n')
#print('}\n?>')
arq.write('}\n?>')

#print(classe.atributos.nome)
arq.close()

















    
