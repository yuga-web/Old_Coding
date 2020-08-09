close all;
clear all;

fprintf('SMITH-WATERMAN ALGORITHM')
seqsample=fastaread('C:\Users\Lenovo\Downloads\pro2\testingdna3000bp.fasta','ignoregaps',true)
C = struct2cell(seqsample);
k=10;
sequence=C{2};
n=length(sequence);
kmer=n-k+1
nmer=nmercount(seqsample,k);
for i=1:kmer
    score(i)=swalign(nmer{i},'ACTCATGCTG','alphabet','NT')
end