close all;
clear all;

fprintf('SMITH-WATERMAN ALGORITHM')
seqsample=fastaread('100bpsampledna.fasta','ignoregaps',true)
C = struct2cell(seqsample);
k=10;
sequence=C{2};
n=length(sequence);
kmer=n-k+1
nmer=nmercount(seqsample,k)

for i=1:kmer

        [score,alignment]=nwalign(nmer{i},'ACTCATGCTG','alphabet','NT')
 
end