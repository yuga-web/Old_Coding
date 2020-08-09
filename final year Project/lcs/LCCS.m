seqsample=fastaread('skincancer1303.fasta','ignoregaps',true)
seqtest=fastaread('testingdna.txt','ignoregaps',true)
X='skincancer1303.fasta';
Y='testingdna.txt';
LCS(X,Y);