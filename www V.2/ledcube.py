import RPi.GPIO as GPIO
import time

#-------- SETTING PINS ------------
GPIO.setmode(GPIO.BOARD)
p1=26
p2=23
p3=21
p4=19
l1=5
l2=29
l3=31
l4=32
l5=12
l6=15
l7=33
l8=36
l9=16
l10=13
l11=35
l12=38
l13=18
l14=11
l15=37
l16=40

slp=time.sleep
out=GPIO.output
ol=GPIO.LOW
oh=GPIO.HIGH

piony=[l1,l2,l3,l4,l5,l6,l7,l8,l9,l10,l11,l12,l13,l14,l15,l16]
poziomy=[p1,p2,p3,p4]
wszystko=piony+poziomy

#--------- SETUP OUT ----------------
GPIO.setup(wszystko, GPIO.OUT)
GPIO.output(wszystko, GPIO.HIGH)
slp(0.5)
GPIO.output(wszystko, GPIO.LOW)
slp(0.5)
GPIO.output(wszystko, GPIO.HIGH)
slp(0.5)
GPIO.output(wszystko, GPIO.LOW)
slp(0.5)
######## PROGRAM #########
tmdef=0.5
n=5
iloscpowtorzen=99999
tmms=0.0001
##########################

def program1():
        i=1
        np=1
        while i<=4:
                        if np==1:
                                 out(p1, oh)
                        elif np==2:
                                 out(p2, oh)
                        elif np==3:
                                 out(p3, oh)
                        elif np==4:
                                 out(p4, oh)
                        tm=0.075*tmdef
                        out(l1, oh)
                        slp(tm)
                        out(l2, oh)
                        slp(tm)
                        out(l3, oh)
                        slp(tm)
                        out(l4, oh)
                        slp(tm)
                        out(l8, oh)
                        slp(tm)
                        out(l12, oh)
                        slp(tm)
                        out(l16, oh)
                        slp(tm)
                        out(l15, oh)
                        slp(tm)
                        out(l14, oh)
                        slp(tm)
                        out(l13, oh)
                        slp(tm)
                        out(l9, oh)
                        slp(tm)
                        out(l5, oh)
                        slp(tm)
                        out(l6, oh)
                        slp(tm)
                        out(l7, oh)
                        slp(tm)
                        out(l11, oh)
                        slp(tm)
                        out(l10, oh)
                        slp(tm)
                        out(wszystko, ol)
                        i+=1
                        np+=1
                        if np==5:
                            np=1
        out(wszystko, ol)


def program2():
    i=1
    out(poziomy, oh)
    while i<=n:
        tm=0.3*tmdef
        out(l1, oh)
        out(l6, oh)
        out(l11, oh)
        out(l16, oh)
        slp(tm)
        out(piony, ol)
        out(l2, oh)
        out(l6, oh)
        out(l11, oh)
        out(l15, oh)
        slp(tm)
        out(piony, ol)
        out(l3, oh)
        out(l7, oh)
        out(l10, oh)
        out(l14, oh)
        slp(tm)
        out(piony, ol)
        out(l4, oh)
        out(l7, oh)
        out(l10, oh)
        out(l13, oh)
        slp(tm)
        out(piony, ol)
        out(l8, oh)
        out(l7, oh)
        out(l10, oh)
        out(l9, oh)
        slp(tm)
        out(piony, ol)
        out(l12, oh)
        out(l11, oh)
        out(l6, oh)
        out(l5, oh)
        slp(tm)
        out(piony, ol)
        i+=1
    out(wszystko, ol)

def program3():
    out(wszystko, ol)
    out(piony, oh)
    i=0
    while  i<=2:
        tm=0.14*tmdef
        out(p1, oh)
        slp(tm)
        out(p2, oh)
        out(p1, ol)
        slp(tm)
        out(p3, oh)
        out(p2, ol)
        slp(tm)
        out(p4, oh)
        out(p3, ol)
        slp(tm)
        out(p3, oh)
        out(p4, ol)
        slp(tm)
        out(p2, oh)
        out(p3, ol)
        slp(tm)
        out(p1, oh)
        out(p2, ol)

        i+=1

def program4():
    out(wszystko, ol)
    tm=0.05*tmdef
    i=0
    while i<=10:
        out(wszystko, oh)
        slp(tm)
        out(wszystko, ol)
        slp(tm)
        i+=1

def program2x2s():
    i=1
    out(poziomy, oh)
    while i<=n:
        tm=0.15*tmdef
        out(l1, oh)
        out(l6, oh)
        out(l11, oh)
        out(l16, oh)
        slp(tm)
        out(piony, ol)
        out(l2, oh)
        out(l6, oh)
        out(l11, oh)
        out(l15, oh)
        slp(tm)
        out(piony, ol)
        out(l3, oh)
        out(l7, oh)
        out(l10, oh)
        out(l14, oh)
        slp(tm)
        out(piony, ol)
        out(l4, oh)
        out(l7, oh)
        out(l10, oh)
        out(l13, oh)
        slp(tm)
        out(piony, ol)
        out(l8, oh)
        out(l7, oh)
        out(l10, oh)
        out(l9, oh)
        slp(tm)
        out(piony, ol)
        out(l12, oh)
        out(l11, oh)
        out(l6, oh)
        out(l5, oh)
        slp(tm)
        out(piony, ol)
        i+=1
    out(wszystko, ol)

def program5():
    tm=0.7*tmdef
    i=1
    while i==1:
        out(wszystko, ol)
        out(p3, oh)
        out(p2, oh)
        out(l10, oh)
        out(l7, oh)
        out(l6, oh)
        out(l11, oh)
        slp(tm)
        out(l2, oh)
        out(l3, oh)
        out(l8, oh)
        out(l12, oh)
        out(l15, oh)
        out(l14, oh)
        out(l9, oh)
        out(l5, oh)
        slp(tm)
        out(l10, ol)
        out(l7, ol)
        out(l6, ol)
        out(l11, ol)
        out(l1, oh)
        out(l4, oh)
        out(l13, oh)
        out(l16, oh)
        slp(tm)
        out(p1, oh)
        out(p4, oh)
        slp(tm)
        out(piony, oh)
        out(p2, ol)
        out(p3, ol)
        slp(tm)
        out(piony, ol)
        out(l6, oh)
        out(l7, oh)
        out(l10, oh)
        out(l11, oh)
        slp(tm)
        out(piony, oh)
        slp(tm)
        out(p1, ol)
        out(p4, ol)
        slp(tm)
        i=2
    out(wszystko, ol)

def spad():
    tm=0.09*tmdef
    out(p4, oh)
    slp(tm)
    out(p3, oh)
    out(p4, ol)
    slp(tm)
    out(p2, oh)
    out(p3, ol)
    slp(tm)
    out(p1, oh)
    out(p2, oh)
    slp(tm)
    out(p1, oh)
    slp(tm)


def program6():
    out(wszystko, ol)
    out(l3, oh)
    out(l9, oh)
    out(l16, oh)
    out(l8, oh)
    spad()
    out(wszystko, ol)
    out(l1, oh)
    out(l7, oh)
    out(l13, oh)
    spad()
    out(wszystko, ol)
    out(l10, oh)
    out(l4, oh)
    out(l11, oh)
    spad()
    out(wszystko, ol)
    out(l5, oh)
    out(l15, oh)
    out(l4, oh)
    spad()
    out(wszystko, ol)
    out(l7, oh)
    out(l9, oh)
    out(l1, oh)
    out(l16, oh)
    out(l4, oh)
    spad()
    out(wszystko, ol)
    out(l3, oh)
    out(l9, oh)
    out(l16, oh)
    out(l8, oh)
    spad()
    out(wszystko, ol)
    out(l1, oh)
    out(l7, oh)
    out(l13, oh)
    spad()
    out(wszystko, ol)
    out(l10, oh)
    out(l4, oh)
    out(l11, oh)
    spad()
    out(wszystko, ol)
    out(l1, oh)
    out(l7, oh)
    out(l13, oh)
    spad()
    out(wszystko, ol)
    out(l10, oh)
    out(l4, oh)
    out(l11, oh)
    spad()
    out(wszystko, ol)
    out(l5, oh)
    out(l15, oh)
    out(l4, oh)
    spad()
    out(wszystko, ol)
    out(l7, oh)
    out(l9, oh)
    out(l1, oh)
    out(l16, oh)
    out(l4, oh)
    spad()
    out(wszystko, ol)

def program7():
    tm=0.15*tmdef
    out(wszystko, ol)
    out(p2, oh)
    out(p3, oh)
    i=0
    while i<=2:
        out(l16, oh)
        out(l15, oh)
        out(l14, oh)
        slp(tm)
        out(l13, oh)
        out(l16, ol)
        slp(tm)
        out(l9, oh)
        out(l15, ol)
        slp(tm)
        out(l5, oh)
        out(l14, ol)
        slp(tm)
        out(l1, oh)
        out(l13, ol)
        slp(tm)
        out(l2, oh)
        out(l9, ol)
        slp(tm)
        out(l3, oh)
        out(l5, ol)
        slp(tm)
        out(l4, oh)
        out(l1, ol)
        slp(tm)
        out(l8, oh)
        out(l2, ol)
        slp(tm)
        out(l12, oh)
        out(l3, ol)
        slp(tm)
        out(l16, oh)
        out(l4, ol)
        slp(tm)
        out(l15, oh)
        out(l8, ol)
        slp(tm)
        out(l14, oh)
        out(l12, ol)
        i+=1
    out(wszystko, ol)


def program8():
    out(wszystko, ol)
    tm=0.12*tmdef
    a1=[l1,l2,l3,l4]
    a2=[l5,l6,l7,l8]
    a3=[l9,l10,l11,l12]
    a4=[l13,l14,l15,l16]
    out(poziomy, oh)
    out(a1, oh)
    slp(tm)
    out(a2, oh)
    out(a1, ol)
    slp(tm)
    out(a3, oh)
    out(a2, ol)
    slp(tm)
    out(a4, oh)
    out(a3, ol)
    slp(tm)
    out(a3, oh)
    out(a4, ol)
    slp(tm)
    out(a2, oh)
    out(a3, ol)
    slp(tm)
    out(a1, oh)
    out(a2, ol)
    slp(2*tm)
    out(a1, ol)
    slp(tm)
    b1=[l4,l8,l12,l16]
    b2=[l3,l7,l11,l15]
    b3=[l2,l6,l10,l14]
    b4=[l1,l5,l9,l13]
    out(b1, oh)
    slp(tm)
    out(b2, oh)
    out(b1, ol)
    slp(tm)
    out(b3, oh)
    out(b2, ol)
    slp(tm)
    out(b4, oh)
    out(b3, ol)
    slp(tm)
    out(b3, oh)
    out(b4, ol)
    slp(tm)
    out(b2, oh)
    out(b3, ol)
    slp(tm)
    out(b1, oh)
    out(b2, ol)
    slp(tm)
    out(b1, ol)
    slp(tm)


def mig(l, p, tm=tmms):
    out(l, oh)
    out(p,oh)
    slp(tm)
    out(l, ol)
    out(p, ol)


def program9():
    tie=0.05
    tm=tmms
    for i in range(2):

        stm=0
        while tie>=stm:
            mig(l16,p4)
            mig(l11,p3)
            mig(l6,p2)
            mig(l1,p1)
            stm+=tm*4

        stm=0
        while tie>=stm:
            mig(l12,p4)
            mig(l11,p3)
            mig(l6,p2)
            mig(l5,p1)
            stm+=tm*4

        stm=0
        while tie>=stm:
            mig(l8,p4)
            mig(l7,p3)
            mig(l10,p2)
            mig(l9,p1)
            stm+=tm*4

        stm=0
        while tie>=stm:
            mig(l4,p4)
            mig(l7,p3)
            mig(l10,p2)
            mig(l13,p1)
            stm+=tm*4

        stm=0
        while tie>=stm:
            mig(l3,p4)
            mig(l7,p3)
            mig(l10,p2)
            mig(l14,p1)
            stm+=tm*4

        stm=0
        while tie>=stm:
            mig(l2,p4)
            mig(l6,p3)
            mig(l11,p2)
            mig(l15,p1)
            stm+=tm*4

        stm = 0
        while tie >= stm:
            mig(l1, p4)
            mig(l6, p3)
            mig(l11, p2)
            mig(l16, p1)
            stm += tm * 4

        stm = 0
        while tie >= stm:
            mig(l5, p4)
            mig(l6, p3)
            mig(l11, p2)
            mig(l12, p1)
            stm += tm * 4

        stm = 0
        while tie >= stm:
            mig(l9, p4)
            mig(l10, p3)
            mig(l7, p2)
            mig(l8, p1)
            stm += tm * 4

        stm = 0
        while tie >= stm:
            mig(l13, p4)
            mig(l10, p3)
            mig(l7, p2)
            mig(l4, p1)
            stm += tm * 4

        stm = 0
        while tie >= stm:
            mig(l14, p4)
            mig(l10, p3)
            mig(l7, p2)
            mig(l3, p1)
            stm += tm * 4

        stm = 0
        while tie >= stm:
            mig(l15, p4)
            mig(l11, p3)
            mig(l6, p2)
            mig(l2, p1)
            stm += tm * 4



x=1
while x<=iloscpowtorzen:
    program1()
    program2()
    program8()
    program3()
    program4()
    program5()
    program2x2s()
    program6()
    program7()
    program8()
    program9()
    x+=1



GPIO.cleanup()