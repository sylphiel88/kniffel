import tkinter as tk
from tkinter.constants import X

window = tk.Tk()
window.geometry("210x210")
plotlabel = tk.Label(window,text="",background="#000000")
plotlabel.place(x=5,y=5,width=200,height=200)
plotlabel2 = tk.Canvas(window,background="#aaaaaa")
plotlabel2.place(x=6,y=6,width=198,height=198)
plotlabel2.create_line(5,100,205,100)
plotlabel2.create_line(100,5,100,205)


def plot(x):
    return x,2*(x**2)+3*x-2

for i in range(1000):
    x,y=plot((i-500)/100)
    print(x,y)
    plotlabel2.create_line(100+x*20,100-y*20,101+x*20,100-y*20,fill="#00ff00")
tk.mainloop()
