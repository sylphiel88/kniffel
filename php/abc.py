# var=[]
# inp=0
# while inp != -1:
#     inp=int(input("Zahl eingeben: (-1 für Ende): "))
#     if (inp!=-1):
#         var.append(inp)

# def sortieren(var):
#     for n in range(len(var),-1,-1):
#         for i in range(n-1):
#             if var[i]>var[i+1]:
#                 var[i],var[i+1]=var[i+1],var[i]
#     return var
    

# print(sortieren(var))
z = lambda x,y:x*y
print(z(5,4))
